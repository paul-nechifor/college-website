#include <stdio.h>

/*
void swap(int* a, int* b)
{
	int aux;
	aux=*a; *a=*b; *b=aux;
}
*/

void swap(int* a, int* b)
{
	_asm
	{
		mov eax, [ebp+8]
		mov ebx, [ebp+12]
		mov ecx, [eax]
		mov edx, [ebx]
		mov [eax], edx
		mov [ebx], ecx
	}
}

int main(void)
{
	int a=5, b=7;
	printf("a=%d b=%d\n", a, b);
	swap(&a, &b);
	printf("a=%d b=%d\n", a, b);
	return 0;
}