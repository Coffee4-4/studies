/*
3. Ler um conjunto de n�meros reais, armazenando-o em vetor e
calcular o quadrado de cada posi��o deste vetor, armazenando o
resultado em outro vetor. Os conjuntos tem 10 elementos cada.
Imprimir todos os conjuntos.
*/
#include<iostream>
#include <locale.h>

using namespace std;

int main(){
	setlocale(LC_ALL, "Portuguese");
	int i; 
	float v1[10],v2[10];
	
	for(i=0;i<10;i++){
		cout<< "Digite o "<<i<<"� valor:"<< endl;
		cin>>v1[i];
		v2[i] = v1[i]*v1[i];
		
	};
	
	for(i=0;i<10;i++){
		cout<<"Posi��o ["<<i<<"]: " << v1[i] <<"| "<<"O quadrado: "<<v2[i]<< endl;
	};

	
	
	
	
	return 0;
}
