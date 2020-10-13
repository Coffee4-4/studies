#include <iostream>
#include <locale.h>
using namespace std;

int main(){
	setlocale(LC_ALL, "Portuguese");
	int i, n, soma;
	soma = 0;
	
	for(i=0; i < 10; i++){
		cout<< "Digite um número: " << endl;
		cin >> n;
		if(n<=40){
			soma = soma +n;
		}
	}
	
	cout << "A soma dos valores inferiores a 40 é: "<< soma;

			
	return 0;
}

