/*
5. Leia um vetor de 10 posições. Contar e escrever quantos valores
pares ele possui.
*/

#include<iostream>
#include <locale.h>
using namespace std;

int main(){
	setlocale(LC_ALL, "Portuguese");
	
	int i, cont;
	int v[10],v2[10];
	
	cont = 0;
	
	for(i=0; i<10; i++){
		cout<< "Digite o "<<i<<"º valor:"<< endl;
		cin>>v[i];
		
		if(v[i] % 2 == 0){
			cont++;
			v2[i] = v[i];
			
		}else{
			v2[i]= 0;
		}
		
	}
	cout<< "O total de pares foi: "<<cont<<endl;
	cout<< "Suas Posições são: "<<endl;
	
	for(i=0; i<10; i++){
		cout << "Posição ["<<i<<"]: " << v2[i] <<endl;
}
	
	return 0;
}
