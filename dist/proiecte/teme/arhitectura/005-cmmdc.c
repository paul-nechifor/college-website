#include <stdio.h>
int main(void)
{
	unsigned a=1071, b=1029, cmmdc;
	_asm
	{
		mov eax, a
		mov ebx, b
start:
		cmp ebx, 0
		je sfarsit
		mov edx, 0
		div ebx       ; a=a/b  d=a%b
		mov eax, ebx  ; a=b
		mov ebx, edx  ; b=d
		jmp start
sfarsit:
		mov cmmdc, eax
	}
	printf("cmmdc(%d,%d)=%d\n", a, b, cmmdc);
	return 0;
}