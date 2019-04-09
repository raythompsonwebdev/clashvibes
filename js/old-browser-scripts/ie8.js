(function()
{
        function ol(e)
        {//we have an event object
            e = e || window.event;
            if (!e.stopEvent)
            {
                if (Object && Object.getPrototypeOf)
                {//get the prototype
                    e = Object.getPrototypeOf(e);
                }
                else
                {//getting a prototype in IE8 is a bit of a faff, this expression works on most objects, though
                 //it's part of my custom .getPrototypeOf method for IE
                    e = this[e.constructor.toString().match(/(function|object)\s+([A-Z][^\s(\]]+)/)[2]].prototype;
                }
                e.stopEvent = function(bubble)
                {//augment it (e references the prototype now
                    bubble = bubble || false;
                    if (this.preventDefault)
                    {
                        this.preventDefault();
                        if (!bubble)
                        {
                            this.stopPropagation();
                        }
                        return this;
                    }
                    this.returnValue = false;
                    this.cancelBubble = !bubble;
                    return this;
                };
            }
            alert(e.stopEvent ? 'ok' : 'nok');//tested, it alerts ok
            if (this.addEventListener)
            {
                this.removeEventListener('load',ol,false);
                return;
            }
            document.attachEvent('onkeypress',function(e)
            {
                e = e || window.event;
                if (e.stopEvent)
                {//another event, each time alerts ok
                    alert('OK!');
                }
            });
            this.detachEvent('onload',ol);
        }
        if (this.addEventListener)
        {
            this.addEventListener('load',ol,false);
        }
        else
        {
            this.attachEvent('onload',ol);
        }
})();
