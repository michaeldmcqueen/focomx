module.exports = {
  prefix: '',
  important: true,
  theme: {
    extend: {},
    textColor: theme => ({
      'white': '#ffffff',
      'black': '#15191A',
      'dark': '#173963',
      'red': '#DE4839',
      'yellow': '#FFB800',
      'blue': '#1C99D3',
    }), 
    backgroundColor: theme => ({
      'white': '#ffffff',
      'dark': '#173963',
      'light': '#F4F4F4',
      'red': '#DE4839',
      'yellow': '#FFB800',
      'blue': '#1C99D3',
    }),
    borderWidth: theme => ({
      default: '1px',
      '2': '2px',
      '4': '4px',
      '15': '15px',
      '25': '25px',
    }),
  },
  variants: {},
  plugins: []
}
