#include <iostream>
#include <locale.h>
using namespace std;

int main(){
	setlocale(LC_ALL, "Portuguese");
	int i,n;
	cout << "Digite um número: " << endl;
	cin >> n;
	
	if(n<=0 || n>10){
		while(n<=0|| n>10){
			cout << "O número deve ser maior que 0."<< endl;
			cout << "Digite um novo número: " << endl;
			cin >>n;
}}
	
		for( i=1;i<= 10;i++){
			cout << n <<" x "<<i<<" = "<<n*i<<endl;}
		
			
	return 0;
}

