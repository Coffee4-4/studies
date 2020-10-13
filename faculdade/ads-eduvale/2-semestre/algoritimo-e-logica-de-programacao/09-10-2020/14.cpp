#include <iostream>
#include <locale.h>
using namespace std;

int main(){
	setlocale(LC_ALL, "Portuguese");
	int i, num1,num2, soma;
	soma = 0;
	cout << "Digite o primeiro número: "<< endl;
	cin>> num1;
	cout <<"Digite o segundo número: " << endl;
	cin >> num2;
	
	if(num2 == num1){
		while(num1 == num2){
			cout<< "O valor deve ser diferente do primeiro digitado, digite outro valor: "<< endl;
			cin >> num2;
		}	
	}
	
	if(num1 > num2){
		for(i=num2; i <= num1; i++){
			soma = soma + i;
			cout << soma;
		}
		
	}else{
		for(i=num1; i <= num2; i++){
			soma = soma + i;
			
		}
		
	}
	cout << "Resultado: "<< soma;
				
	return 0;
}

