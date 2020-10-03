#include <iostream>
using namespace std;

int main(){
	int num, i;
	
	cout << "Informe um numero" << endl;
	cin >>num;
	i = 0;
	while (i <= 10){
		cout << i << " x "<< num <<": "<< (i*num)<< endl;
		i++;
	}
	
	return 0;
}
