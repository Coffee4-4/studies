#include <iostream>
#include <locale.h>
using namespace std;

int main(){
	setlocale(LC_ALL,"Portuguese");
	int i,num,result;
	
	cout << "Informe um numero:" << endl;
	cin >>num;
	
	for (i=num-1; i > 0 ;i--){
	
		result= num * i;
		num = result;
	}
	cout <<"O fatorial ser�: " <<result;
	
	return 0;
}
