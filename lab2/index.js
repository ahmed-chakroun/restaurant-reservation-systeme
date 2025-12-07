let updatebtn=document.querySelectorAll('#update');
let cancel=document.querySelectorAll('#x');
let p=document.querySelectorAll('.p')
let item=document.querySelectorAll('.thefood')

updatebtn.forEach((btn)=>{
btn.addEventListener('click',()=>{
  let tr=btn.closest('tr')
  let inp=tr.querySelectorAll('.inpp')
  let p=tr.querySelectorAll('.p')
  let btnn=tr.querySelectorAll('.ok')
  let x=tr.querySelectorAll('.x')
  inp.forEach((ip)=>{
    ip.style.display="block"
  })
  x.forEach((xx)=>{
    xx.style.display="block"
  })
  btnn.forEach((bt)=>{
    bt.style.display="block"
  })
  p.forEach((pp)=>{
    pp.style.display="none"
  })
  btn.style.display="none"
})


})
cancel.forEach((x)=>{
x.addEventListener('click',()=>{
  let tr=x.closest('tr')
  let inp=tr.querySelectorAll('.inpp')
  let btnn=tr.querySelectorAll('.ok')
  let xx=tr.querySelectorAll('.x')
  let updatebtnnn=tr.querySelectorAll('.update')
  inp.forEach((ip)=>{
    ip.style.display="none"
  })
  xx.forEach((xxx)=>{
    xxx.style.display="none"
  })
  btnn.forEach((bt)=>{
    bt.style.display="none"
  })
  p.forEach((pp)=>{
    pp.style.display="block"
  })
  x.style.display="none"
  updatebtnnn.forEach((updatebtnn)=>{
    updatebtnn.style.display="block"
  })
})
})

item.forEach((i)=>{
  i.addEventListener("click",()=>{
       finaltotal.value=0

    let section=i.closest('section')

    let div =section.querySelectorAll('#item')
    div.forEach((divv)=>{
    divv.style.border='1px solid black'
    })
    let qt=section.querySelectorAll('.qt')
    let minus=section.querySelectorAll('.minus')
    let price=section.querySelectorAll('.priceinp')
    let name =section.querySelectorAll('.nameinp')
     qt.forEach((qtt)=>{
    
      qtt.style.display='block'
            qtt.stepUp(1)
    })
   
    minus.forEach((min)=>{
    min.addEventListener("click",()=>{
      qt.forEach((qtt)=>{
      qtt.style.display='block'
    if(qtt.value>=1){
      qtt.stepDown(1)
    }
    })
    })
      min.style.display='block'
    })
     qt.forEach((qtt)=>{
      price.forEach((itemprice)=>{
        let calc= qtt.value*itemprice.value
        let total=section.querySelectorAll('#total')
      total.forEach((itemtotal)=>{
        itemtotal.value=calc
      })
      })
    })
    qt.forEach((qtt)=>{
      name.forEach((itemname)=>{
        let foodqt= String(qtt.value+itemname.value)
        let qtname=section.querySelectorAll("#qtname")
        qtname.forEach((itemnami)=>{
        itemnami.value=foodqt
      })
      })
    })
  })
  
let valider=document.getElementById('valider')
    let finaltotal=document.getElementById('finaltotal')
      let finalorder=document.getElementById('allfood')

  valider.addEventListener('click',()=>{
        

        let section=i.closest('section')
        let totali=section.querySelectorAll('#total')
        let qtname=section.querySelectorAll("#qtname")
        let next=document.getElementById('next')
        let canceled=document.getElementById('canceled')
  totali.forEach((itemtotali)=>{

    let calcul =Number(finaltotal.value)+Number(itemtotali.value)

    finaltotal.value=calcul
    
        })
     qtname.forEach((nami)=>{

    let qt =String(finalorder.value+nami.value)

    finalorder.value=qt
        })
  valider.style.display='none'
  next.style.display='block'
   canceled.style.display='block'
   }) 
           let canceled=document.getElementById('canceled')
         let next=document.getElementById('next')

  let finaltotali=document.getElementById('finaltotal')
      let finalorderi=document.getElementById('allfood')

   canceled.addEventListener('click',()=>{
  
    let section=i.closest('section')
    let div =section.querySelectorAll('#item')
    div.forEach((divv)=>{
    divv.style.border='1px solid transparent'
    })
    let qt=section.querySelectorAll('.qt')
    let minus=section.querySelectorAll('.minus')
    let totali=section.querySelectorAll('#total')
    let qtname=section.querySelectorAll("#qtname")
   
qt.forEach((qtt)=>{
    
      qtt.style.display='none'
            qtt.value=0
    })
  minus.forEach((min)=>{
     min.style.display='none'
    })
      totali.forEach((itemtotali)=>{
    
    itemtotali.value=0
    let calcul =0

    finaltotali.value=calcul
    
        })
    qtname.forEach((nami)=>{
    nami.value=''
    let qt =""

    finalorderi.value=qt
        })
  valider.style.display='block'
    canceled.style.display='none'
    next.style.display='none'
   })
  

})
 