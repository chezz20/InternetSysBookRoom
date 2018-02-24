(function(){
    var form = document.getElementById('form1');

    addEvent(form, 'submit', function(e){
        e.preventDefault();
        var elements = this.elements;
        var firstName = elements.firstName.value;
        var msg = 'Witaj, ' + firstName;
        document.getElementById('main').textContent = msg;
    });
}());
