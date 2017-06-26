/*
Copyleft (C) 2006 Hélio Perroni Filho
xperroni@yahoo.com
ICQ: 2490863

This file is part of ChatterBean.

ChatterBean is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later version.

ChatterBean is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with ChatterBean (look at the Documents/ directory); if not, either write to the Free Software Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA, or visit (http://www.gnu.org/licenses/gpl.txt).
*/

/*
Extends the window object with functions to deal with the chatterbot interface.
*/

/*
Method Section
*/




function checkEnter(e)
{
	var characterCode;
	if(e && e.which) characterCode = e.which;
	else
	{
		e = event;
		characterCode = e.keyCode;
	}	 
	if(characterCode == 13)	respond();
}

/* Changes the current face image. */
function changeFace(expression)
{
	var face = document.getElementById('face');
	face.src = 'emotions/'+ expression + '.png';
}

/* Changes the page loaded in the inline frame. */
function goTo(url)
{
	window.location.href = url;
}

/* Takes a user request and outputs an appropriate response. */
function respond()
{
  /* Java Applet encapsulating the chatterbot. */
  var applet = document.getElementById('ChatterApplet');

  /* Input HTML control where users type their requests. */
  var request = document.getElementById('request');

  /* Output HTML control for responses to user requests. */
  var response = document.getElementById('response');

  var oldHeight = response.scrollHeight;

  if (response.value != '')
    response.value += '\n';
  
  var input = request.value;
  response.value +=
    '> ' + input + '\n' +
    applet.respond(input.replace(/\n/, ''));

  request.value = '';

  response.scrollTop = oldHeight;
}

/*
Cookie Management Section
*/

/* Appends a learned (request, response) pair to the bot's persistent memory. */
function appendMemory(input, output)
{
  input = input.replace(/\\/g, '\\\\');
  input = input.replace(/\"/g, '\\"');

  output = output.replace(/\\/g, '\\\\');
  output = output.replace(/\"/g, '\\"');
 
  var memory = readCookie('memory');
  if (memory == null)
    memory = '';
  else
    memory += escape(', ');

  /* The cookie system is _really_ anal about non-alphanumeric characters, so we better escape them. */  
  memory +=  escape('"' + input + '", "' + output + '"');  

  createCookie('memory', memory, 30);
}

/* Retrieves the bot's persisted memory. */
function retrieveMemory()
{
  try
  {
    var memory = readCookie('memory');
    memory = '{' + unescape(memory) + '}';
    return memory;
  }
  catch (e)
  {
  }
  
  return '{}';
}

/* Sets the value of a cookie. */
function createCookie(name, value, days)
{
  var date = new Date();
	date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
	var expires = "; expires=" + date.toGMTString();
  
  var cookie = name + "=" + value + expires + "; path=/";
	document.cookie = cookie;
}

/* Retrieves the contents of a cookie by its name. */
function readCookie(name)
{
  if (document.cookie == null)
    return '';
  
	var nameEQ = name + "=";
	var cookies = document.cookie.split(';');
	for(var i = 0; i < cookies.length; i++)
	{
    // Removes starting and trailing whitespace.
		var cookie = cookies[i].replace(/^\s+|\s+$/g, '');
		if (cookie.indexOf(nameEQ) == 0)
      return cookie.substring(nameEQ.length, cookie.length);
	}

	return null;
}

/* Erases a cookie. */
function eraseCookie(name)
{
  /* Recreates the named cookie with an expiration date of one day ago. */
	createCookie(name, "", -1);
}

/*
Initialization Section
*/

/* Creates te result variable to the <javascript> tag. */
window.result = '';

/* Java Applet encapsulating the chatterbot. */
var applet = document.getElementById('ChatterApplet');

/* Output HTML control for responses to user requests. */
var response = document.getElementById('response');

/* Generate the welcome message. */
response.value = applet.respond('WELCOME');
