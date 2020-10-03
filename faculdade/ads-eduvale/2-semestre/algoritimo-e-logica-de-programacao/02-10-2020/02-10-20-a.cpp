#include <iostream>
#include <locale.h>
using namespace std;

int main(){
	int numero = 0;
	
	cout << "Informe um número: " << endl;
	cin >> numero;
	
	switch(numero){
		
		case 1: cout << "Numero um" << endl; break;
		case 2: cout << "Numero dois" << endl; break;
		case 3: cout << "Numero tres" << endl; break;
		case 4: cout << "Numero quatro" << endl; break;
		default: cout << "Numero Inexistente" << endl;
	}		
	}
	
	return 0;
}

