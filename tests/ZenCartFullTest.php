<?php

namespace ZenCart;


use Facebook\WebDriver\Exception\NoSuchElementException;
use Facebook\WebDriver\Exception\TimeOutException;
use Facebook\WebDriver\Exception\UnexpectedTagNameException;
use Facebook\WebDriver\WebDriver;
use Facebook\WebDriver\WebDriverBy;
use Facebook\WebDriver\WebDriverExpectedCondition;
use Lmc\Steward\Test\AbstractTestCase;

/**
 * @group zencart_full_test
 */
class ZenCartFullTest extends AbstractTestCase {

	public $runner;

//	/**
//	 * @throws NoSuchElementException
//	 * @throws TimeOutException
//	 * @throws UnexpectedTagNameException
//	 */
//	public function testUsdPaymentInstant() {
//		$this->runner = new ZenCartRunner( $this );
//		$this->runner->ready( array(
//				'capture_mode' => 'Instant',
//			)
//		);
//	}
//
//	/**
//	 *
//	 * @throws NoSuchElementException
//	 * @throws TimeOutException
//	 * @throws UnexpectedTagNameException
//	 */
//	public function testUsdPaymentDelayed() {
//		$this->runner = new ZenCartRunner( $this );
//		$this->runner->ready( array(
//				'currency'     => 'USD',
//				'capture_mode' => 'Delayed',
//			)
//		);
//	}

	/**
	 * @throws NoSuchElementException
	 * @throws TimeOutException
	 * @throws UnexpectedTagNameException
	 */
	public function testRonPaymentDelayed() {
		$this->runner = new ZenCartRunner( $this );
		$this->runner->ready( array(
				'capture_mode' => 'Delayed',
				'currency'     => 'RON',
			)
		);
	}

//
//	/**
//	 * @throws NoSuchElementException
//	 * @throws TimeOutException
//	 * @throws UnexpectedTagNameException
//	 */
//	public function testEURPaymentInstant() {
//		$this->runner = new ZenCartRunner( $this );
//		$this->runner->ready( array(
//				'capture_mode' => 'Instant',
//				'currency'     => 'EUR',
//			)
//		);
//	}
//
//	/**
//	 *
//	 * @throws NoSuchElementException
//	 * @throws TimeOutException
//	 * @throws UnexpectedTagNameException
//	 */
//	public function testDkkPaymentInstant() {
//		$this->runner = new ZenCartRunner( $this );
//		$this->runner->ready( array(
//				'currency'               => 'DKK',
//				'capture_mode'           => 'Instant',
//				'log_version' => true,
//			)
//		);
//	}


}
