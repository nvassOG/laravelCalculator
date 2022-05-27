[...document.querySelectorAll('.calc')].forEach(node => {
  node.addEventListener('click', e => {
      const value = e.target.innerText;
    const input = document.getElementById('input');
      if(value === 'C') 
      {
          input.value = "";
      }
      else if(['+', '*', '-', '/'].includes(value)) 
      {
          input.value += ' ' + value + ' ';
      }
      else if(value === '+-') 
      {
        input.value *= -1;
      }
      else
      {
          input.value += value;
      }
  })
});

const history = [];
const count = 0;

[...document.querySelectorAll('.history')].forEach(node => {
  node.addEventListener('click', e => 
  {
    const value = e.target.innerText;
    const input = document.getElementById('input');
    input.value = value;
  })
})