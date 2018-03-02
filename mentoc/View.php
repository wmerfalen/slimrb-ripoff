<?php
/**
 * @author William Merfalen <github@bnull.net>
 * @package mentoc 
 * @license wtfpl  [@see https://www.wtfpl.net]
 */
namespace mentoc;
class View {
	use Traits\Configurator;
	/** @var bool $m_error if an error occured */
	protected $m_error = true;
	/** @var bool $m_loaded whether or not the view has been loaded */
	protected $m_loaded = false;
	public function __construct(array $options = []){
		if(is_array($options) && count($options)){
			$this->m_init_options($options,
				[
				'get' => 
					['error' => 'm_error','loaded' => 'm_loaded'],
				'set' => []
				]
			);
		}
	}

}