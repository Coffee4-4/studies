/*
2. Crie um programa que l� 6 valores inteiros e, em seguida, mostre
na tela os valores lidos.
*/


#include<iostream>
#include <locale.h>
using namespace std;

int main(){
	setlocale(LC_ALL, "Portuguese");
	int i;
	int v[6];
	
	for(i=0;i<6;i++){
		cout<< "Digite o "<<i<<"� valor:"<< endl;
		cin>>v[i];
		
	};
	
	for(i=0;i<6;i++){
		cout<<"Posi��o ["<<i<<"]: " << v[i] << endl;
	};

	
	
	
	
	return 0;
}
