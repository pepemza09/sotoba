<?php
class form_aportes extends soeva_ei_formulario
{

	function extender_objeto_js()
	{
		echo "
		// ocultamos los campos por defecto
		{$this->objeto_js}.ini = function(es_inicial)
		{
				this.ef('bruto').mostrar(false);
				this.ef('aporte_2').mostrar(false);
				this.ef('neto').mostrar(false);
				this.ef('aporte_1_5').mostrar(false);
		}

		{$this->objeto_js}.evt__aporta_sindicato__validar = function()
		{
				switch (this.ef('aporta_sindicato').get_estado()) {
					case '1':
						this.ef('bruto').mostrar(true);
						this.ef('aporte_2').mostrar(true);
						this.ef('neto').mostrar(false);
						this.ef('neto').set_estado('0');
						this.ef('aporte_1_5').mostrar(false);
						this.ef('aporte_1_5').set_estado('0');
						return true;
						break;
					case '0':
						this.ef('bruto').mostrar(false);
						this.ef('bruto').set_estado('0');
						this.ef('aporte_2').mostrar(false);
						this.ef('aporte_2').set_estado('0');
						this.ef('neto').mostrar(true);
						this.ef('aporte_1_5').mostrar(true);
						return true;
						break;
					default:
						this.ef('bruto').mostrar(false);
						this.ef('aporte_2').mostrar(false);
						this.ef('neto').mostrar(false);
						this.ef('aporte_1_5').mostrar(false);
						break;
				}
		}
		{$this->objeto_js}.evt__neto__validar = function()
		{
			this.ef('aporte_1_5').set_estado(this.ef('neto').get_estado() * 0.015);
			return true;
		}

		{$this->objeto_js}.evt__bruto__validar = function()
		{
			this.ef('aporte_2').set_estado(this.ef('bruto').get_estado() * 0.02);
			return true;
		}
		";
	}


}
?>
