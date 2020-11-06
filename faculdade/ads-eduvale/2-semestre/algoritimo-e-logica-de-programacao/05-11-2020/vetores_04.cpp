/*
4. Faça um programa que leia um vetor de 8 posições e, em seguida,
leia também dois valores X e Y quaisquer correspondentes a duas
posições no vetor. Ao final seu programa dever ´a escrever a soma dos
valores encontrados nas respectivas posições X e Y.
*/

#include<iostream>
#include <locale.h>
using namespace std;

int main(){
	setlocale(LC_ALL, "Portuguese");
	
	int i,x,y,soma;
	float v[8];
	
	for(i=0;i<8;i++){
		cout<< "Digite o "<<i<<"º valor:"<< endl;
		cin>>v[i];
	}

	cout<< "Digite a posição de X:"<<endl;
	cin>>x;
	cout<< "Digite a posição de Y:"<<endl;
	cin>>y;
	
	soma= v[x] + v [y];

	cout << "O valor da soma é "<<soma<<endl;
	
	
	return 0;
}
