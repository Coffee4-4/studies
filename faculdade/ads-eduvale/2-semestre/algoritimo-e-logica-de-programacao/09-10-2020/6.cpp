#include <iostream>
#include <locale.h>
using namespace std;

int main(){
	setlocale(LC_ALL, "Portuguese");
	int i,n;
	cout << "Digite um n�mero: " << endl;
	cin >> n;
	
	if(n<=0){
		while(n==0){
			cout << "O n�mero deve ser maior que 0."<< endl;
			cout << "Digite um novo n�mero: " << endl;
			cin >>n;
}}
	
		for( i=1;i<= 10;i++){
			cout << n <<" x "<<i<<" = "<<n*i<<endl;}
		
			
	return 0;
}

