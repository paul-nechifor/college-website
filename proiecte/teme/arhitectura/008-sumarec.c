#include <stdio.h>

unsigned suma(unsigned a)
{
	_asm
	{
		mov ebx, [ebp+8]
		cmp ebx, 0
		je e_zero
		dec ebx
		push ebx
		call suma
		add esp, 4
		add eax, [ebp+8]
		jmp sfarsit
e_zero:
		sub eax, eax
sfarsit:
		nop
	}
}

int main(void)
{
	unsigned a=5;
	printf("%d\n", suma(a));
	return 0;
}