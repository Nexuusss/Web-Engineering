const number = parseInt(prompt('Enter number of terms: '));
let n1 = 0, n2 = 1, nextTerm;

console.log('Fibonacci Series:');

const arr=[]

for (let i = 1; i <= number; i++) {
    arr.push(n1)
    nextTerm = n1 + n2;
    n1 = n2;
    n2 = nextTerm;
    
}
console.log('Fibonacci Series:',arr)
console.log('Fibonacci Series length:',arr.length)