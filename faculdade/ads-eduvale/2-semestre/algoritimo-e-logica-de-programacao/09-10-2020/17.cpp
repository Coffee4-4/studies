#include <iostream>
#include <locale.h>
using namespace std;

int main(){
	setlocale(LC_ALL, "Portuguese");
	int total, i;
	double mercadoria, totalM, media;
	
	cout<< "Digite o n�mero total de mercadorias no estoque: "<< endl;
	cin >> total;
	for(i=1; i <= total; i++){
		cout<< "Digite o valor da "<<i<<"� mercadoria"<<endl;
		cin >> mercadoria;
		totalM= totalM + mercadoria;
	}
	media = totalM/total;	
	cout<<"A soma total em mercadorias �: "<<totalM<<endl;
	cout<<"O valor medio entre as mercadorias �: "<< media<<endl;
	
	return 0;
}

