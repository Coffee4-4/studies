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
	if(n>=0){
		c=c+n;
	}
	}
	c=c/10;
	cout<< "A média aritmética entre os valores digitados é "<< c ;
	

			
	return 0;
}

