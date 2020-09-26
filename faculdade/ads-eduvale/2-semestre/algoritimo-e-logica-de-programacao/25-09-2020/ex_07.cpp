#include <iostream>
#include <locale.h>
using namespace std;

int main(){
	setlocale(LC_ALL, "Portuguese"); //acentuação pt-br
	int idade;
	
	cout << "Informe sua idade:" << endl;
	cin >> idade;
	
	if(idade < 18){
		cout << "Menor de idade, você tem " << idade << " anos.";
	} else{
		cout << "Você é maior de idade, você tem " << idade << " anos.";
	}
	
	
	
	return 0;
}
