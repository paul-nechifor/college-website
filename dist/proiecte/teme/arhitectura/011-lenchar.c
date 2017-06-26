#include <stdio.h>

/*
int len(char *c)
{
	int lg=0;
	while (*c++) lg++;
	return lg;
}
*/
int len(char *c)
{
	_asm
	{
		mov eax, 0
		mov ebx, [ebp+8]
bucla:
		cmp [ebx+eax], 0
		je stop
		inc eax
		jmp bucla
stop:
	}
}
int main(void)
{
	char strg[] = "cinci";
	printf("lungimea sirului \"%s\" este %d\n", strg, len(strg));
	return 0;
}