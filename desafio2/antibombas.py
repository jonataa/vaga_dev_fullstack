class Code(object):
    def __init__(self, code):
        self.code = code

    def sum(self):
        return sum(self.numbers())

    def numbers(self):
        numbers = []
        for letter in list(self.code):
            numbers.append(self._number(letter))
        return numbers

    def _number(self, letter):
        return ord(letter.upper()) - 64

class Kit(object):

    def is_valid(self, numbers_color, numbers_code):
        return sum(numbers_code) % sum(numbers_color) == 11

if __name__ == "__main__":
    from argparse import ArgumentParser
    parser = ArgumentParser()
    parser.add_argument("color")
    parser.add_argument("code")
    args = parser.parse_args()
    numbers_color = Code(args.color).numbers()
    numbers_code = Code(args.code).numbers()
    if Kit().is_valid(numbers_color, numbers_code):
        print ('Bomb defused :)')
    else:
        print ('BOOOMMM!!')
