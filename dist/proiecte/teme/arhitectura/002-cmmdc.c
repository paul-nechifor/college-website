#include <stdio.h>
int main(void)
{
	unsigned a=12, b=18, cmmdc;
	_asm
	{
		mov eax, a
		mov ebx, b
start:
		cmp eax, ebx
		ja a_mare
		je scrie
		sub ebx, eax
		jmp start
a_mare:
		sub eax, ebx
		jmp start
scrie:
		mov cmmdc, eax
	}
	printf("cmmdc(%d,%d)=%d\n", a, b, cmmdc);
	return 0;
}