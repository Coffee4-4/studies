/*
6. Faça um programa que receba do usuário um vetor com 10
posições. Em seguida deverá ser impresso o maior e o menor
elemento do vetor.
*/

#include<iostream>
#include <locale.h>
using namespace std;

int main(){
	setlocale(LC_ALL, "Portuguese");
	
	int i, maior,menor;
	int v[10];
	
	
	for(i=0; i<10; i++){
		cout<< "Digite o "<<i<<"º valor:"<< endl;
		cin>>v[i];
		
		if(v[i] == v[0]){
			menor = v[i];
		}else if(v[i] < v[i-1]){
			menor = v[i];
			
		}else if(v[i] > v[i-1]){
			maior = v[i];
		}
		
	}
	cout<< "O maior valor foi: "<<maior<<endl;
	cout<< "O menor valor foi: "<<menor<<endl;
	

	
	return 0;
}
