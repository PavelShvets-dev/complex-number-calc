# Math operations with complex numbers
* *calc_sum(a,b,c...)* - calculates the sum of given numbers comma separated
* *calc_subtract(a,b,c...)* - calculates the subtraction of given numbers comma separated
* *calc_multiply(a,b,c...)* - calculates the multiplication of given numbers comma separated
* *calc_divide(a,b,c...)* - calculates the division of given numbers comma separated

# Complex number
Complex number can be constructed with class *ComplexNumber*
*Example: (1 - 5i)*
```
$mynumber = ComplexNumber(1, -5);
```

# Unit testing
```
phpunit CalcTest.php
```