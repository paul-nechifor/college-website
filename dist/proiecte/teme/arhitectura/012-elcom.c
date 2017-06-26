#include <stdio.h>
//numarul de elemente comune din 2 vectori
int comune(int* a, int b, int* c, int d)
{
	_asm
	{
		mov eax, 0                // numarul de elemente comune
		mov ebx, [ebp+8]          // pointer 1
		mov ecx, [ebp+16]         // pointer 2

		mov edi, 0                // index 1
		bucla_unu:
		cmp edi, [ebp+12]         // marimea vector 1
		jae sfarsit_bucla_unu

			mov esi, 0            // index 2

			bucla_doi:
			cmp esi, [ebp+20]     // marimea vector 2
			jae sfarsit_bucla_doi

				push eax

				mov edx, [4*edi+ebx]
				mov eax, [4*esi+ecx]
				cmp edx, eax

				pop eax

				jne nu_egal
				inc eax
				nu_egal:

			inc esi
			jmp bucla_doi
			sfarsit_bucla_doi:

		inc edi
		jmp bucla_unu
		sfarsit_bucla_unu:
	}
}

int main(void)
{
	int v1[]={2,5,7,9}, v2[]={5,2,9,6,1}, n1=4, n2=5;
	printf("numarul de elemente comune este %d\n", comune(v1,n1,v2,n2));
	return 0;
}

