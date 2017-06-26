#include <stdio.h>

// O functie care poate fi apelata din asm pentru a afisa un numar
void printf_asm(char *form, int n)
{
	printf(form, n);
}
/*
int sumavect(int* vect, int numar)
{
	int i, suma=0;
	for (i=0; i<numar; i++) suma+=vect[i];
	return suma;
}
*/
int sumavect(int* vect, int numar)
{
	_asm
	{
		mov eax, 0          ; suma
		mov ebx, [ebp+8]    ; adresa elementului curent
		mov ecx, [ebp+12]   ; numarul de elemente ramase
bucla:
		add eax, [ebx]
		add ebx, 4
		dec ecx
		cmp ecx, 0
		ja bucla
	}
}
int main(void)
{
	int n = 5, v[100] = {10,20,30,40, 9}, *vect = v;
	char s[] = "suma=%d\n", *strn = s;
	_asm
	{
		push n
		push vect
		call sumavect
		add esp, 8
		push eax
		push strn
		call printf_asm
		add esp, 8
	}
	return 0;
}