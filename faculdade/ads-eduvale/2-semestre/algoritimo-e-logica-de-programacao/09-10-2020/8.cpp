#include <iostream>
#include <locale.h>
using namespace std;

int main(){
	setlocale(LC_ALL, "Portuguese");
	int i,n,c;
	c=0;
	for(i=0;i<10;i++){
	cout << "Digite um n�mero: " << endl;
	cin >>n;
	if(n<0){
		c++;
	}
	}
	
	cout<< "Foram digitados "<<c<<" n�meros negativos.";
	

			
	return 0;
}

