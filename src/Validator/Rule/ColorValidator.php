<?php
/**
 * Part of Windwalker project. 
 *
 * @copyright  Copyright (C) 2014 - 2015 LYRASOFT. All rights reserved.
 * @license    GNU Lesser General Public License version 3 or later.
 */

namespace Windwalker\Validator\Rule;

use Windwalker\Validator\AbstractValidator;

/**
 * The ColorValidator class.
 * 
 * @since  2.0
 */
class ColorValidator extends AbstractValidator
{
	/**
	 * Test value and return boolean
	 *
	 * @param mixed $value
	 *
	 * @return  boolean
	 */
	protected function test($value)
	{
		$value = trim($value);

		if (empty($value))
		{
			return false;
		}

		if ($value[0] !== '#')
		{
			return false;
		}

		// Remove the leading # if present to validate the numeric part
		$value = ltrim($value, '#');

		// The value must be 6 or 3 characters long
		if (!((strlen($value) == 6 || strlen($value) == 3) && ctype_xdigit($value)))
		{
			return false;
		}

		return true;
	}
}
