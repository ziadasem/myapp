import 'package:flutter/material.dart' ;

class text extends StatelessWidget {
int textt ;
text (int text){
textt = text ;
}

  @override
    Widget build(BuildContext buildContext) {     
      return 
      Column( children: <Widget>[
      Text(textt.toString())
      , Container (
       margin: EdgeInsets.all(0.0),
    
    )]) ;
    }

}