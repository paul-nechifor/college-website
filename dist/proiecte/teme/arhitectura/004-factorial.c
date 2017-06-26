#include <stdio.h>
int main(void)
{
	unsigned n=10, fact;
	_asm
	{
		mov ebx, n
		mov eax, 1
start:
		mul ebx
		dec ebx
		cmp ebx, 1 ; nu-i nevoie sa inmulteasca cu 1
		ja start
		mov fact, eax
	}
	printf("%d! = %d\n", n, fact);
	return 0;
}