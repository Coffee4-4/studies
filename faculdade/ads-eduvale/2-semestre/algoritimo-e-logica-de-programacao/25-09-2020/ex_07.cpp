#include <iostream>
#include <locale.h>
using namespace std;

int main(){
	setlocale(LC_ALL, "Portuguese"); //acentua��o pt-br
	int idade;
	
	cout << "Informe sua idade:" << endl;
	cin >> idade;
	
	if(idade < 18){
		cout << "Menor de idade, voc� tem " << idade << " anos.";
	} else{
		cout << "Voc� � maior de idade, voc� tem " << idade << " anos.";
	}
	
	
	
	return 0;
}
