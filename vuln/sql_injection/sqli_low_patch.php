<?php

if( isset( $_REQUEST[ 'Submit' ] ) ) {
	// Get input
	$id = $_REQUEST[ 'id' ];

	// Validate input: user_id must be numeric
	if( !ctype_digit( $id ) ) {
		$html .= "<pre>Invalid user ID.</pre>";
	}
	else {
		// Use prepared statement to prevent SQL Injection
		$stmt = mysqli_prepare(
			$GLOBALS["___mysqli_ston"],
			"SELECT first_name, last_name FROM users WHERE user_id = ?"
		);

		mysqli_stmt_bind_param( $stmt, "i", $id );
		mysqli_stmt_execute( $stmt );

		$result = mysqli_stmt_get_result( $stmt );

		while( $row = mysqli_fetch_assoc( $result ) ) {
			$first = htmlspecialchars( $row["first_name"], ENT_QUOTES, 'UTF-8' );
			$last  = htmlspecialchars( $row["last_name"], ENT_QUOTES, 'UTF-8' );

			$html .= "<pre>ID: {$id}<br />First name: {$first}<br />Surname: {$last}</pre>";
		}

		mysqli_stmt_close( $stmt );
	}

	mysqli_close($GLOBALS["___mysqli_ston"]);
}

?>