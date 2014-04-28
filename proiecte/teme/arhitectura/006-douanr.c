#include <stdio.h>
unsigned suma(unsigned a, unsigned b)
{
	_asm
	{
		mov eax, [ebp+8]
		mov ebx, [ebp+12]
		add eax, ebx
	}
}
int main(void)
{
	unsigned a=123, b=1100;
	printf("suma(%d,%d)=%d\n", a, b, suma(a,b));
	return 0;
}