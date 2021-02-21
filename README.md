# Practica-Json

Es interesante porque es fácil de manejar, ocupa poco espacio y es compatible con casi todos los lenguajes modernos de programación.

## Valores en JSON

object
array
string
number
true
false
null

### Object
{}
{members}
members
    pair
    pair, members
pair
    string: value

### Array
    []
    [elementes]
elements
    value
    value, elements

### String
    ""
    "chars"
chars
    char
    char char
char
    any-Unicode-character-except-"-or-\-or-control-character
    \"
    \/
    \b
    \f
    \n
    \r
    \t
    \u four-hex-digits

### Number
    int
    int frac
    int exp
    int frac exp
int
    digit
    digit1-9 digits
    - digit
    - digit
    - digit1-9 digits
frac
    .digits
exp
    e digits
digits
    digit
    digit digits
e
    e, e+, e-
    E, E+, E-