package com.example.qbaobao.myapplication;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class CheapActivity extends AppCompatActivity {

    Button backPage2_1,minesetting2_3;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        getSupportActionBar().hide();
        setContentView(R.layout.activity_cheap);

        backPage2_1 = (Button)findViewById(R.id.backPage2_1);
        minesetting2_3 = (Button)findViewById(R.id.minesetting2_3);
        backPage2_1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                CheapActivity.this.finish();
            }
        });
        minesetting2_3.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent i = new Intent("android.litreily.MineSettingActivity");
                startActivity(i);
                CheapActivity.this.finish();
            }
        });
    }
}
