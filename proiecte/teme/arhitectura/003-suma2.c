#include <stdio.h>
int main(void)
{
	unsigned n=100, suma;
	_asm
	{
		mov eax, n
		mov ebx, eax
		inc eax
		mul ebx
		shr eax, 1
		mov suma, eax
	}
	printf("suma de la i=1 la %d = %d\n", n, suma);
	return 0;
}