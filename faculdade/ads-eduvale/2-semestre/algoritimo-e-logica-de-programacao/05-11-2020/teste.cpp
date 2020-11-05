#include <iostream>
#include <locale.h>
using namespace std;


int main (){

    char letra;
    cout<< "Informe um letra: "<< endl;
    cin >> letra;

    switch(letra){

        case 'q':
            cout << "Sair do Sistema" << endl; exit(1);
        case 'Q':
            cout << "Sair do Sistema" << endl; exit(1);
    }

}
