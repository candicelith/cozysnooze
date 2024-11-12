import { TempusDominus, Namespace } from '@eonasdan/tempus-dominus';

const linkedPicker1Element = document.getElementById('linkedPickers1');
const linked1 = new TempusDominus(linkedPicker1Element);
const linked2 = new TempusDominus(document.getElementById('linkedPickers2'), {
  useCurrent: false,
});

//using event listeners
linkedPicker1Element.addEventListener(Namespace.events.change, (e) => {
  linked2.updateOptions({
    restrictions: {
      minDate: e.detail.date,
    },
  });
});

//using subscribe method
const subscription = linked2.subscribe(Namespace.events.change, (e) => {
  linked1.updateOptions({
    restrictions: {
      maxDate: e.date,
    },
  });
});

// event listener can be unsubscribed to:
// subscription.unsubscribe();
