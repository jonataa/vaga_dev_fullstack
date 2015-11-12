import pytest
from antibombas import Code
from antibombas import Kit

def test_convert_code_to_array_numbers():
    assert [1, 2, 3] == Code('ABC').numbers()
    assert [3, 1, 2] == Code('CAB').numbers()
    assert [24, 25, 26] == Code('XYZ').numbers()

def test_get_sum_from_code():
    assert 6 == Code('ABC').sum()
    assert 6 == Code('CAB').sum()
    assert 75 == Code('XYZ').sum()
    assert 11 == Code('EF').sum()
    assert 16 == Code('DGE').sum()
    assert 11 == Code('CBEA').sum()
    assert 27 == Code('EJL').sum()

def test_button_is_valid():
    k = Kit()
    assert True == k.is_valid(Code('DGE').numbers(), Code('EF').numbers())
    assert True == k.is_valid(Code('EJL').numbers(), Code('CBEA').numbers())
    assert False == k.is_valid(Code('ABC').numbers(), Code('CBA').numbers())    
