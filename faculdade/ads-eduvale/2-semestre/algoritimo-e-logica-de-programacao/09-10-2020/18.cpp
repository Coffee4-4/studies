#include <iostream>
#include <locale.h>
using namespace std;

int main(){
	setlocale(LC_ALL, "Portuguese");
	int total, i;
	double mercadoria, totalM, media;
	char resposta;
	
	cout<< "Bem vindo!!!"<< endl;
	total =0;
	resposta = 's';
	while(resposta == 's'||resposta == 'S'){
		cout<< "Digite o valor da nova mercadoria: "<<endl;
		cin >> mercadoria;
		totalM= totalM + mercadoria;
		cout << "Gostaria de inserir mais mercadorias (s/n)"<<endl;
		cin >> resposta;
		total++;
		
	}
	
	media = totalM/total;	
	cout<<"A soma total em mercadorias é: "<<totalM<<endl;
	cout<<"O valor medio entre as mercadorias é: "<< media<<endl;
	
	return 0;
}


