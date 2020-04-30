var app = new Vue({
    el: '#appA',
    data: {
        nombreProceso:'',
        descProceso:'',
        nombrePersona:'',
        rol:'',
        tiempo:'',
        nombreInv:'',
        descInv:'',
        tipoInv:'',
        cantInv:'',
      proyectos:[
          {name:'FMX-45/V01    Inspección de Boroscopio', desc:'Verificación de soldaduras por parte del proveedor mediante un boroscopio, se reporta todo en un formato de video como evidencia y en el anexo de observaciones.', time:'2020-12-28 08:00:56'},
          {name:'IP-PNO-37 Pruebas de hermeticidad', desc:'Después de las soldaduras se hacen pruebas de inyección de aire para detectar fugas o defectos de fabricación en alguna de las líneas de suministro.',time:'2020-08-16 12:25:00'},
          {name:'SOL-PNO-20 "Documentación de Soldadura "', desc:'Proceso mediante el cual se documenta la soldadura con el numero de soldadura del dia, hora, fecha, lugar y coladas.',time:'2020-08-16 12:25:00'}
      ],
      roles:[
          {name:'Alejandro', role:'Reviewer Projects'},
          {name:'Carlos', role:'Programador'},
          {name:'Kevin', role:'Scrum Master'}
      ],
      inventarios:[
          {idProd:'232435',nombre:'UNIDAD MANEJADORA DE AIRE (UMA)', desc:'Equipo encargado de la inyección de aire libre de partículas al 1% de contaminación, a las áreas de producción de medicamentos orales, algunas características son la potencia en Kw de los serpentines de agua helada y caliente para control de humedad y temperatura del aire, CFM producidos por el motor, y la frecuencia en la que se pondrá el setpoint luego de la calibración inicial',tipo:'Producto', cantidad:'13'},
          {idProd:'465465',nombre:'Ventiladores 500W', desc:'Este equipo se encarga de proporcionar enfriamiento a los motores',tipo:'Insumo', cantidad:'8'},
      ]
    },
    methods:{
        deleteProccess(index){
            this.proyectos.splice(index,1);
            alert('Proceso borrado');
        },
        agregarProceso() {
            //Con this nos referimos a lo que tenemos dentro de nuestro objeto de datos
            this.proyectos.push({
                name:this.nombreProceso,desc:this.descProceso
            });
            this.nombreProceso = '';
            this.descProceso = '';
            alert('Proceso agregado');
           
        },
        agregarPersona(){
            this.roles.push({
                name:this.nombrePersona, role:this.rol
            });
            this.nombrePersona = '';
            this.rol = '';
            alert('Persona agregada');
        },
        agregarInv(){
            this.inventarios.push({
                nombre:this.nombreInv, desc:this.descInv, tipo:this.tipoInv,cantidad:this.cantInv
            });
            this.nombreInv = '';
            this.descInv = '';
            this.tipoInv = '';
            this.cantidad = '';
            alert('Inventario agregado');
        }
    }
  });