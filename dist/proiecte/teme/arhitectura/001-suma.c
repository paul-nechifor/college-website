#include <stdio.h>
int main(void)
{
	unsigned n=100, rez;
	_asm
	{
		mov ebx, n
		mov eax, 0
start:
		add eax, ebx
		dec ebx
		cmp ebx, 0
		ja start
		mov rez, eax
	}
	printf("Suma de la i=1 la %d = %d\n", n, rez);
	return 0;
}