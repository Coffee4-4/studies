/*
4. Fa�a um programa que leia um vetor de 8 posi��es e, em seguida,
leia tamb�m dois valores X e Y quaisquer correspondentes a duas
posi��es no vetor. Ao final seu programa dever �a escrever a soma dos
valores encontrados nas respectivas posi��es X e Y.
*/

#include<iostream>
#include <locale.h>
using namespace std;

int main(){
	setlocale(LC_ALL, "Portuguese");
	
	int i,x,y,soma;
	float v[8];
	
	for(i=0;i<8;i++){
		cout<< "Digite o "<<i<<"� valor:"<< endl;
		cin>>v[i];
	}

	cout<< "Digite a posi��o de X:"<<endl;
	cin>>x;
	cout<< "Digite a posi��o de Y:"<<endl;
	cin>>y;
	
	soma= v[x] + v [y];

	cout << "O valor da soma � "<<soma<<endl;
	
	
	return 0;
}
