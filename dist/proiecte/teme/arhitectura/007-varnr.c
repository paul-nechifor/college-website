#include <stdio.h>
unsigned suma(unsigned n, ...)
{
	_asm
	{
		mov ebx, [ebp+8]
		mov eax, 0
		mov ecx, ebp
		add ecx, 8
start:
		add ecx, 4
		add eax, [ecx]
		dec ebx
		cmp ebx, 0
		ja start
	}
}
int main(void)
{
	printf("%d\n%d\n", suma(3, 1, 2, 3, 4), suma(5, 1,10,100,1000,10000));
	return 0;
}