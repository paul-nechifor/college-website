#include <stdio.h>
int main(void)
{
	unsigned a=666, b=111, c=999, max;
	_asm
	{
		mov eax, a
		mov ebx, b
		cmp eax, ebx
		ja a_mare1
		mov eax, ebx
a_mare1:
		mov ebx, c
		cmp eax, ebx
		ja a_mare2
		mov eax, ebx
a_mare2:
		mov max, eax
	}
	printf("max(%d, %d, %d) = %d\n", a, b, c, max);
	return 0;
}