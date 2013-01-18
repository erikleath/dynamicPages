<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $id
 * @property string $customer_id
 * @property string $recurring_id
 * @property string $rid
 * @property string $firstname
 * @property string $lastname
 * @property integer $company
 * @property string $email
 * @property string $username
 * @property string $password
 * @property string $address1
 * @property string $address2
 * @property string $city
 * @property string $region
 * @property string $country
 * @property string $phone
 * @property string $register
 * @property string $start
 * @property string $end
 * @property string $last_login_time
 * @property string $hear
 * @property integer $contact_id
 */
class Users extends CActiveRecord
{
//credit card information variables
	public $name;
	public $card;
        public $method;
	public $exp;
        public $expM;
        public $expY;
	public $cvv2;

	//billing information variables
        public $billfname;
        public $billlname;
	public $baddress;
	public $baddress2;
	public $bcity;
	public $bstate;
	public $bzip;
	public $bphone;
	public $bemail;

	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
			// name, email, subject and body are required
			array('billfname, billlname, method,card, expM, expY, cvv2, baddress, bcity, bstate, bzip,bname,', 'required'),
                        array('card,cvv2,bzip','numerical','integerOnly'=>true),
			// email has to be a valid email address
			array('bemail', 'email'),
		);
	}

	/**
	 * Declares customized attribute labels.
	 * If not declared here, an attribute would have a label that is
	 * the same as its name with the first letter in upper case.
	 */
	public function attributeLabels()
	{
		return array(
                        'id' => 'ID',
                        'rid' => 'RID',
                        'method' =>'Card Type: ',
                        'card' => 'Card Number: ',
                        'billfname'=>'First Name: ',
                        'billlname'=>'Last Name: ',
                        'baddress' => 'Address ',
                        'baddress2' => 'Address 2',
                        'bcity' => 'City: ',
                        'bstate' => 'State: ',
                        'bzip' => 'Zip: ',
                        'bphone' => 'Phone: ',
                        'bemail' => 'Email Address: ',
                        'cvv2' => '3 Digit Security Code: ',
			'exp' => "Expiration Date: ",
                        'verifyCode'=>'Verification Code',
		);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('customer_id',$this->customer_id,true);
		$criteria->compare('recurring_id',$this->recurring_id,true);
		$criteria->compare('rid',$this->rid,true);
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('company',$this->company);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('address1',$this->address1,true);
		$criteria->compare('address2',$this->address2,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('region',$this->region,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('register',$this->register,true);
		$criteria->compare('start',$this->start,true);
		$criteria->compare('end',$this->end,true);
		$criteria->compare('last_login_time',$this->last_login_time,true);
		$criteria->compare('hear',$this->hear,true);
		$criteria->compare('contact_id',$this->contact_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}