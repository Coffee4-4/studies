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
	if(n>=0){
		c=c+n;
	}
	}
	c=c/10;
	cout<< "A m�dia aritm�tica entre os valores digitados � "<< c ;
	

			
	return 0;
}

