#include <iostream>
#include <locale.h>
using namespace std;

int main(){
	setlocale(LC_ALL, "Portuguese");
	int i,n,c;
	c=0;
	for(i=0;i<10;i++){
	cout << "Digite um número: " << endl;
	cin >>n;
	if(n>=10 && n<=20 ){
		c++;
	}
	}
	
	cout<< "Foram digitados "<<c<<" números entre o intervalo de 10 e 20.";
	

			
	return 0;
}

